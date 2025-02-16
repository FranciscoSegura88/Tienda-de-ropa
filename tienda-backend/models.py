from typing import Optional
from pydantic import BaseModel
from enum import Enum

class Genero(str, Enum):
    hombre = "hombre"
    mujer = "mujer"
    niño = "niño"
    niña = "niña"

class TipoPrenda(str, Enum):
    camisa = "camisa"
    pantalon = "pantalon"
    vestido = "vestido"
    falda = "falda"
    chaqueta = "chaqueta"
    zapatos = "zapatos"

class Item(BaseModel):
    name: str
    price: float
    is_offer: bool = None 
    genero: Genero = None
    tipo_prenda: TipoPrenda = None
    imagen_url: Optional[str]