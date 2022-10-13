#Se muestra una pregunta, con 3 respuestas posibles
print("¿Cuál es el nombre del perro de la familia Simpson?")
print("a) Santa's Little Helper")
print("b) Snowball II")
print("c) Snowball I")

#Se lee la respuesta del usuario
respuesta = input("Respuesta: ")

#Se comprueba y se muestra si la respuesta es correcta o no
contador = 0
if respuesta == "a":
    print("Correcto")
    contador = contador + 10
else:
    print("Incorrecto")
    contador = contador - 5

print()


print("Elija la opción correcta: La serie ha emitido un total de…")
print("a) 583") #Correcta
print("b) 696")
print("c) 417")
respuesta = input("Respuesta: ")

if respuesta == "a":
    print("Correcto")
    contador = contador + 10
else:
    print("Incorrecto")
    contador = contador - 5

print()

print("Los únicos personajes que han sido dibujados con cinco dedos en la serie son…")
print("a) Dios y Jesucristo") #Correcta
print("b) Paul McCartney y Yoko Ono")
print("c) Bruce Springsteen y Lady Gaga")

#Se lee la respuesta del usuario
respuesta = input("Respuesta: ")

#Por cada pregunta correcta se suma 10 al contador, y por cada incorrecta se resta 5
if respuesta == "a":
    print("Correcto")
    contador = contador + 10
else:
    print("Incorrecto")
    contador = contador - 5
print()

#calcular puntuacion
print("La puntuación es: ", contador)