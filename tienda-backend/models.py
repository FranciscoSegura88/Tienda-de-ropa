from typing import Optional
from pydantic import BaseModel
from enum import Enum

class Genero(str, Enum):
    hombre = "hombre"
    mujer = "mujer"
    niño = "niño"
    niña = "niña"

class Item(BaseModel):
    name: str
    price: float
    is_offer: bool = None 
    genero: Genero = None
    imagen: Optional[str]