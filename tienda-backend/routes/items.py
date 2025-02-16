import base64
from fastapi import APIRouter, Depends, File, UploadFile
from database import db
from models import Item

router = APIRouter()

@router.get("/items")
async def obtener_items():
    items = await db["items"].find().to_list(1000)
    return items

@router.get("/items/{genero}")
async def obtener_items_por_genero(genero: str):
    items = await db["items"].find({"genero": genero}).to_list(1000)
    return items

@router.post("/ropa")
async def agregar_ropa(nombre: str, precio: float, genero: str, talla: str, imagen: UploadFile = File(...)):
    contenido = await imagen.read()
    imagen_base64 = base64.b64encode(contenido).decode("utf-8")

    nuevo_item = {
        "nombre": nombre,
        "precio": precio,
        "genero": genero,
        "talla": talla,
        "imagen": imagen_base64
    }

    resultado = await db["ropa"].insert_one(nuevo_item)
    return {"id": str(resultado.inserted_id)}