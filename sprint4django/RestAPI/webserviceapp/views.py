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

def devolver_juego_por_id(request, id_solicitado):
	juego = Tjuegos.objects.get(id = id_solicitado)
	comentarios = juego.tcomentarios_set.all()
	lista_comentarios = []
	for fila_comentario_sql in comentarios:
			diccionario = {}
			diccionario['id'] = fila_comentario_sql.id
			diccionario['comentario'] = fila_comentario_sql.comentario
			lista_comentarios.append(diccionario) 
	resultado = { 
			'id' : juego.id,
			'titulo' : juego.nombre,
			'dificultad' : juego.dificultad,
			'imagen' : juego.url_imagen,
			'trailer' : juego. url_video,
			'comentarios' : lista_comentarios
		}
	return JsonResponse(resultado, json_dumps_params={'ensure_ascii': False})
