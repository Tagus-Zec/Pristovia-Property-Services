from playwright.sync_api import sync_playwright
import os

def run_verify(page, name, width, height):
    page.set_viewport_size({"width": width, "height": height})
    page.goto("http://localhost:8000")
    page.wait_for_timeout(2000)
    
    # 1. Hero
    page.screenshot(path=f"/home/jules/verification/screenshots/{name}_hero.png")
    
    # 2. Services
    page.evaluate("document.getElementById('services').scrollIntoView()")
    page.wait_for_timeout(1000)
    page.screenshot(path=f"/home/jules/verification/screenshots/{name}_services.png")
    
    # 3. Trust / Who we serve
    page.evaluate("document.getElementById('about').scrollIntoView()")
    page.wait_for_timeout(1000)
    page.screenshot(path=f"/home/jules/verification/screenshots/{name}_about.png")
    
    # 4. Wizard Step 1
    page.evaluate("document.getElementById('quote').scrollIntoView()")
    page.wait_for_timeout(1000)
    page.screenshot(path=f"/home/jules/verification/screenshots/{name}_wizard_s1.png")
    
    # Interact with wizard
    page.get_by_label("Full Name").fill(f"Tester {name}")
    page.get_by_label("Email Address").fill("test@pristovia.com")
    page.get_by_label("Phone Number").fill("4371112222")
    page.get_by_role("button", name="Proceed to Next Step").click()
    page.wait_for_timeout(1000)
    
    # Wizard Step 2
    page.screenshot(path=f"/home/jules/verification/screenshots/{name}_wizard_s2.png")

if __name__ == "__main__":
    os.makedirs("/home/jules/verification/videos", exist_ok=True)
    os.makedirs("/home/jules/verification/screenshots", exist_ok=True)
    with sync_playwright() as p:
        browser = p.chromium.launch(headless=True)
        
        # Desktop
        context_d = browser.new_context(record_video_dir="/home/jules/verification/videos")
        run_verify(context_d.new_page(), "desktop", 1920, 1080)
        context_d.close()
        
        # Mobile (Android Small)
        context_m = browser.new_context(record_video_dir="/home/jules/verification/videos")
        run_verify(context_m.new_page(), "mobile", 360, 800)
        context_m.close()
        
        browser.close()
