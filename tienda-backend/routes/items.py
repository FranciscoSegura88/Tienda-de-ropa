import base64
from fastapi import APIRouter
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

@router.post("/agregarRopa")
async def agregar_ropa(item: Item):
    nuevo_item = item.model_dump()
    resultado = await db["items"].insert_one(nuevo_item)
    return {"id": str(resultado.inserted_id)}