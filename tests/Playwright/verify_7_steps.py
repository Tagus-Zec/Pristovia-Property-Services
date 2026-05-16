import asyncio
from playwright.async_api import async_playwright
import sys

async def run():
    async with async_playwright() as p:
        browser = await p.chromium.launch()
        context = await browser.new_context(viewport={'width': 1280, 'height': 800})
        page = await context.new_page()
        
        try:
            # Load page
            await page.goto('http://127.0.0.1:8000')
            
            # Target the main multi-step form
            form = page.locator('#multi-step-form')
            await form.scroll_into_view_if_needed()

            # Verify Step 1
            print("Verifying Step 1...")
            await form.locator('h3:has-text("Step 1")').wait_for()
            
            # Fill step 1
            await form.locator('input[name="full_name"]').fill('John Doe')
            await form.locator('input[name="phone"]').fill('4376611132')
            await form.locator('input[name="email"]').fill('john@example.com')
            await page.click('#multi-step-form button:has-text("Next")')
            
            # Verify Step 2
            print("Verifying Step 2...")
            await form.locator('h3:has-text("Step 2")').wait_for()
            await asyncio.sleep(0.5)
            await form.locator('div:has-text("Commercial")').last.click()
            await page.click('#multi-step-form button:has-text("Next")')
            
            # Verify Step 3
            print("Verifying Step 3...")
            await form.locator('h3:has-text("Step 3")').wait_for()
            await asyncio.sleep(0.5)
            await form.locator('.cursor-pointer').first.click()
            await page.click('#multi-step-form button:has-text("Next")')
            
            # Verify Step 4
            print("Verifying Step 4...")
            await form.locator('h3:has-text("Step 4")').wait_for()
            await asyncio.sleep(0.5)
            await form.locator('input[name="location"]').fill('Toronto')
            await page.click('#multi-step-form button:has-text("Next")')
            
            # Verify Step 5
            print("Verifying Step 5...")
            await form.locator('h3:has-text("Step 5")').wait_for()
            await asyncio.sleep(0.5)
            await form.locator('div:has-text("Medium")').last.click()
            await page.click('#multi-step-form button:has-text("Next")')
            
            # Verify Step 6
            print("Verifying Step 6...")
            await form.locator('h3:has-text("Step 6")').wait_for()
            await asyncio.sleep(0.5)
            await form.locator('input[name="preferred_date"]').fill('2026-05-20')
            await page.click('#multi-step-form button:has-text("Next")')
            
            # Verify Step 7
            print("Verifying Step 7...")
            await form.locator('h3:has-text("Step 7")').wait_for()
            await asyncio.sleep(0.5)
            await form.locator('textarea[name="message"]').fill('Test message for 7 step form.')
            
            # Take screenshot of final step
            await page.screenshot(path='v4_7steps_final.png')
            
            print("All steps verified successfully.")
            
        except Exception as e:
            print(f"Error during verification: {e}")
            await page.screenshot(path='v4_error.png')
            sys.exit(1)
        finally:
            await browser.close()

if __name__ == "__main__":
    asyncio.run(run())
