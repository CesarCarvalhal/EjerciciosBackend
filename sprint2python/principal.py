from factorial import func_factorial
from factorial2 import func_factorial2

print("a) Funcion factorial con recursividad")
print("b) Funcion factorial sin recursividad")
opcion = input("Elige una opcion: ")
if opcion == "a":
    numero = int(input("Introduce un número: "))
    print("El factorial de", numero, "es", func_factorial(numero))
elif opcion == "b":
    numero = int(input("Introduce un número: "))
    print("El factorial sin recursividad de", numero, "es", func_factorial2(numero))
else:
    print("Opcion incorrecta")
