from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.common.by import By
from selenium.webdriver.chrome.service import Service
import time
import unittest

class GoogleSearchTest(unittest.TestCase):

    def setUp(self):
        # Initialize the Chrome WebDriver
        s = Service('D:\webdriver\chromedriver.exe')
        self.driver = webdriver.Chrome(service=s)
           
    def tearDown(self):
        # Close the browser
        self.driver.quit()

    def test_search_in_google1(self):
        # Open Google
        self.driver.get("http://www.google.com")

        # Find the search box element and enter a query
        search_box = self.driver.find_element(By.NAME,"q")
        search_box.send_keys("Selenium Python tutorial")

        # Perform the search
        search_box.send_keys(Keys.RETURN)

        # Wait for the search results to load
        time.sleep(5)

        # Print the title of the current page
        print(self.driver.title)

    def test_search_in_google2(self):
        # Open Google
        self.driver.get("http://www.google.com")

        # Find the search box element and enter a query
        search_box = self.driver.find_element(By.NAME,"q")
        search_box.send_keys("Selenium Python tutorial")

        # Perform the search
        search_box.send_keys(Keys.RETURN)

        # Wait for the search results to load
        time.sleep(5)

        # Print the title of the current page
        print(self.driver.title)

if __name__ == "__main__":
    unittest.main()