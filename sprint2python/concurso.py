import random

def preguntas(n):
    contador = 0
    
    if n == 1:
        print("¿Quién ganó la primera edición de la Champions League?")
        print("a) Real Madrid") #Correcta
        print("b) Bayern Munich")
        print("c) Juventus")
        
        respuesta = input("Respuesta: ")
        
        if respuesta == "a":
            print("¡Correcto!")
            contador = contador + 10
        else:
            print("¡Incorrecto!")
            contador = contador - 5
            print()

    if n == 2:

            print("La serie de Los Simpsons ha emitido un total de…")
            print("a) 583") #Correcta
            print("b) 696")
            print("c) 417")
            
            respuesta = input("Respuesta: ")

            if respuesta == "a":
                print("¡Correcto!")
                contador = contador + 10
            else:
                print("¡Incorrecto!")
                contador = contador - 5
                print()

    if n == 3:
            print("Los únicos personajes que han sido dibujados con cinco dedos en la serie son…")
            print("a) Dios y Jesucristo") #Correcta
            print("b) Paul McCartney y Yoko Ono")
            print("c) Bruce Springsteen y Lady Gaga")

            respuesta = input("Respuesta: ")

            if respuesta == "a":
                print("¡Correcto!")
                contador = contador + 10
            else:
                print("¡Incorrecto!")
                contador = contador - 5
                print()
    return contador


n1 = random.randint(1,3)
contador1 = preguntas(n1)
n2 = random.randint(1,3)
while n1 == n2:
    n2 = random.randint(1,3)
contador2 = preguntas(n2)


print("La puntuación final es de: ", contador1 +contador2)