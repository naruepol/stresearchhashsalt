from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.common.by import By
from selenium.webdriver.chrome.service import Service
import time
import unittest

class ResearchTest(unittest.TestCase):

    def setUp(self):
        # Initialize the Chrome WebDriver
        s = Service('D:\webdriver\chromedriver.exe')
        self.driver = webdriver.Chrome(service=s)
           
    def tearDown(self):
        # Close the browser
        self.driver.quit()

    def test_all_encrypt_type1_1(self):

        self.driver.get("http://localhost/stresearchhashsalt/login.html")

        user_box = self.driver.find_element(By.ID,"user_email_in")
        user_box.send_keys("user1@scienceresearch.com")

        password_box = self.driver.find_element(By.ID,"user_password_in")
        password_box.send_keys("12345")

        login_button = self.driver.find_element(By.ID,"login_btn")
        login_button.click()

        page_content = self.driver.page_source
        self.assertIn("Login Pass", page_content, "Not in Page")

    def test_all_encrypt_type1_2(self):

        self.driver.get("http://localhost/stresearchhashsalt/login.html")

        user_box = self.driver.find_element(By.ID,"user_email_in")
        user_box.send_keys("user2@scienceresearch.com")

        password_box = self.driver.find_element(By.ID,"user_password_in")
        password_box.send_keys("12345")

        login_button = self.driver.find_element(By.ID,"login_btn")
        login_button.click()

        page_content = self.driver.page_source
        self.assertIn("Login Pass", page_content, "Not in Page")
    
    def test_all_encrypt_type1_3(self):

        self.driver.get("http://localhost/stresearchhashsalt/login.html")

        user_box = self.driver.find_element(By.ID,"user_email_in")
        user_box.send_keys("user3@scienceresearch.com")

        password_box = self.driver.find_element(By.ID,"user_password_in")
        password_box.send_keys("12345")

        login_button = self.driver.find_element(By.ID,"login_btn")
        login_button.click()

        page_content = self.driver.page_source
        self.assertIn("Login Pass", page_content, "Not in Page")

    def test_all_encrypt_type1_4(self):

        self.driver.get("http://localhost/stresearchhashsalt/login.html")

        user_box = self.driver.find_element(By.ID,"user_email_in")
        user_box.send_keys("user4@scienceresearch.com")

        password_box = self.driver.find_element(By.ID,"user_password_in")
        password_box.send_keys("12345")

        login_button = self.driver.find_element(By.ID,"login_btn")
        login_button.click()

        page_content = self.driver.page_source
        self.assertIn("Login Pass", page_content, "Not in Page")

    def test_all_encrypt_type1_5(self):

        self.driver.get("http://localhost/stresearchhashsalt/login.html")

        user_box = self.driver.find_element(By.ID,"user_email_in")
        user_box.send_keys("user5@scienceresearch.com")

        password_box = self.driver.find_element(By.ID,"user_password_in")
        password_box.send_keys("12345")

        login_button = self.driver.find_element(By.ID,"login_btn")
        login_button.click()

        page_content = self.driver.page_source
        self.assertIn("Login Pass", page_content, "Not in Page")
    
    def test_all_encrypt_type1_6(self):

        self.driver.get("http://localhost/stresearchhashsalt/login.html")

        user_box = self.driver.find_element(By.ID,"user_email_in")
        user_box.send_keys("user6@scienceresearch.com")

        password_box = self.driver.find_element(By.ID,"user_password_in")
        password_box.send_keys("12345")

        login_button = self.driver.find_element(By.ID,"login_btn")
        login_button.click()

        page_content = self.driver.page_source
        self.assertIn("Login Pass", page_content, "Not in Page")

if __name__ == "__main__":
    unittest.main()