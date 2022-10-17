from factorial import func_factorial
from factorial2 import func_factorial2

import time

print("a) Funcion factorial con recursividad")
print("b) Funcion factorial sin recursividad")
opcion = input("Elige una opcion: ")

if opcion == 'a':
    numero = int(input("Introduce un número: "))
    start_time = time.time()
    print("El factorial de", numero, "es", func_factorial(numero))
    end_time = time.time()
    elapsed_time = end_time - start_time
    print('El tiempo de ejecución ha sido :' + str(elapsed_time) + ' s')
elif opcion == 'b':
    numero = int(input("Introduce un número: "))
    start_time = time.time()
    print("El factorial sin recursividad de", numero, "es", func_factorial2(numero))
    end_time = time.time()
    elapsed_time = end_time - start_time
    print('El tiempo de ejecución ha sido :' + str(elapsed_time) + ' s')
else:
    print('Opción incorrecta')
