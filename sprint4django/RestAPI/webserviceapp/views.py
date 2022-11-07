from django.shortcuts import render
from django.http import HttpResponse, JsonResponse

from .models import Tjuegos

def pagina_de_prueba(request):
	return HttpResponse("<h1>Hola caracola</h1>");

def devolver_juegos(request):
	lista = Tjuegos.objects.all()
	respuesta_final = []
	for fila_sql in lista:
		diccionario = {}
		diccionario['id'] = fila_sql.id
		diccionario['titulo'] = fila_sql.nombre
		diccionario['dificultad'] = fila_sql.dificultad
		diccionario['imagen'] = fila_sql.url_imagen
		diccionario['trailer'] = fila_sql.url_video

		respuesta_final.append(diccionario)
	return JsonResponse(respuesta_final, safe=False)
