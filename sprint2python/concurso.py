#Se muestra una pregunta, con 3 respuestas posibles
print("¿Cuál es el nombre del perro de la familia Simpson?")
print("a) Santa's Little Helper")
print("b) Snowball II")
print("c) Snowball I")

#Se lee la respuesta del usuario
respuesta = input("Respuesta: ")

#Se comprueba y se muestra si la respuesta es correcta o no
if respuesta == "a":
    print("Correcto")
else:
    print("Incorrecto")