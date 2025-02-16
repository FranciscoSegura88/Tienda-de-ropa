from motor.motor_asyncio import AsyncIOMotorClient
import dotenv
import os

dotenv.load_dotenv()

MONGO_DETAILS = os.getenv("MONGO_DETAILS")
DB_NAME = os.getenv("DB_NAME")

client = AsyncIOMotorClient(MONGO_DETAILS)
db = client[DB_NAME]