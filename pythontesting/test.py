import time
from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.chrome.service import Service

s = Service('D:\webdriver\chromedriver.exe')
driver = webdriver.Chrome(service=s)

driver.get("http://www.google.com/")

m = driver.find_element("name", "q")
#enter search text
m.send_keys("Tutorialspoint")
time.sleep(6)
#perform Google search with Keys.ENTER
m.send_keys(Keys.ENTER)
time.sleep(10)
#time.sleep(2)
#driver.close()