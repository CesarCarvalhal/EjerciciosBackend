import random

def main():
    print("Bienvenido al piedra, papel o tijera")
    print("Tienes que elegir una de las siguientes opciones")
    print("1. Piedra")
    print("2. Papel")
    print("3. Tijera")
    print("4. Salir")
    print("")

    jugadas = 0
    ganadas = 0
    perdidas = 0
    empates = 0

    while jugadas < 5:
        print("")
        opcion = int(input("Elige una opción: "))
        if opcion == 4:
            break
        elif opcion < 1 or opcion > 4:
            print("Opción no válida")
            continue
        
        maquina = random.randint(1, 3)
        if maquina == 1:
            print("La máquina ha elegido piedra")
        elif maquina == 2:
            print("La máquina ha elegido papel")
        elif maquina == 3:
            print("La máquina ha elegido tijera")
    

        if opcion == maquina:
            print("Empate")
            empates += 1
        elif opcion == 1 and maquina == 3:
            print("Has ganado")
            ganadas += 1
        elif opcion == 2 and maquina == 1:
            print("Has ganado")
            ganadas += 1
        elif opcion == 3 and maquina == 2:
            print("Has ganado")
            ganadas += 1
        else:
            print("Has perdido")
            perdidas += 1

        jugadas += 1


    print("")
    print("Has ganado", ganadas, "partidas")
    print("Has perdido", perdidas, "partidas")
    print("Has empatado", empates, "partidas")
    print("")
    
    if ganadas > perdidas:
        print("Has ganado el juego")
    elif ganadas < perdidas:
        print("Has perdido el juego")
    else:
        print("Has empatado el juego")


main()