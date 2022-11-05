from selenium import webdriver
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
from selenium.webdriver.common.by import By
import time
import msvcrt


driver = webdriver.Chrome('C:/Users/cesor/Downloads/chromedriver_win32/chromedriver.exe/')
driver.maximize_window()
time.sleep(1)
#driver.delete_all_cookies()
driver.get("https://www.amazon.com/")

#Escribe en la barra de busqueda
WebDriverWait(driver, 5)\
    .until(EC.element_to_be_clickable((By.CSS_SELECTOR,
                                    'input#twotabsearchtextbox')))\
    .send_keys('HP Pavilion azul')

#Hace click en el boton de buscar
WebDriverWait(driver, 5)\
    .until(EC.element_to_be_clickable((By.CSS_SELECTOR,
                                    'input#nav-search-submit-button')))\
    .click()

#Selecciona el link que aparece de primero
WebDriverWait(driver, 5)\
    .until(EC.element_to_be_clickable((By.CSS_SELECTOR,
                                    'a.a-link-normal.s-underline-text.s-underline-link-text.s-link-style.a-text-normal')))\
    .click()

#Abre la lista en donde se puede seleccionar la cantidad de producto
WebDriverWait(driver, 5)\
    .until(EC.element_to_be_clickable((By.CSS_SELECTOR,
                                    'span.a-dropdown-prompt')))\
    .click()

#selecciona la cantidad de producto 
WebDriverWait(driver, 5)\
    .until(EC.element_to_be_clickable((By.CSS_SELECTOR,
                                    'a#quantity_1')))\
    .click()

#Hace click en agregar al carrito
WebDriverWait(driver, 5)\
    .until(EC.element_to_be_clickable((By.CSS_SELECTOR,
                                    'input#add-to-cart-button')))\
    .click()

#Hace click en el boton ir al carrito
WebDriverWait(driver, 5)\
    .until(EC.element_to_be_clickable((By.CSS_SELECTOR,
                                    'a.a-button-text')))\
    .click()


msvcrt.getch()