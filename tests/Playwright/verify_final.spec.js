import { test, expect } from '@playwright/test';

test('verify dark mode visibility and form functionality', async ({ page }) => {
  await page.goto('http://localhost:8000');
  
  // Switch to dark mode
  await page.click('#theme-toggle');
  // Wait a bit for transition
  await page.waitForTimeout(1000);
  
  // Check if dark class is added to html or body
  const isDark = await page.evaluate(() => document.documentElement.classList.contains('dark'));
  console.log('Is dark mode active:', isDark);

  // Scroll to quote section to ensure visibility
  await page.locator('#quote').scrollIntoViewIfNeeded();

  // Take screenshot of quote section in dark mode
  await page.locator('#quote').screenshot({ path: 'v3_quote_dark.png' });
  
  // Take screenshot of FAQ section in dark mode
  await page.locator('#faq').screenshot({ path: 'v3_faq_dark.png' });

  // Test form filling - specifically in the #quote section
  const quoteForm = page.locator('#quote');
  await quoteForm.locator('input[name="full_name"]').fill('Test User');
  await quoteForm.locator('input[name="phone"]').fill('1234567890');
  await quoteForm.locator('input[name="email"]').fill('test@example.com');
  await quoteForm.locator('button:has-text("Next")').click();
  
  await quoteForm.locator('select[name="property_type"]').selectOption('residential');
  await quoteForm.locator('button:has-text("Next")').click();
  
  await quoteForm.locator('select[name="service_type"]').selectOption('standard');
  await quoteForm.locator('button:has-text("Next")').click();
  
  await quoteForm.locator('input[name="location"]').fill('Montreal');
  await quoteForm.locator('button:has-text("Next")').click();
  
  await quoteForm.locator('select[name="condition"]').selectOption('medium');
  await quoteForm.locator('button:has-text("Next")').click();
  
  await quoteForm.locator('input[name="preferred_date"]').fill('2023-12-31');
  await quoteForm.locator('button:has-text("Next")').click();
  
  await quoteForm.locator('textarea[name="message"]').fill('This is a test message');
  
  // Screenshot of last step
  await page.locator('#quote').screenshot({ path: 'v3_quote_step7_dark.png' });
});
