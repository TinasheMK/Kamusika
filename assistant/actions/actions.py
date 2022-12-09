# This files contains your custom actions which can be used to run
# custom Python code.

# See this guide on how to implement these action:
# https://rasa.com/docs/rasa/custom-actions


# This is a simple example for a custom action which utters "Hello World!"

import keyword
from typing import Any, Text, Dict, List
from urllib import request

from rasa_sdk import Action, Tracker, events
from rasa_sdk.executor import CollectingDispatcher
import webbrowser
import requests
import json

apiUrl = "localhost:4000"


class ActionGetBalance(Action):
    def name(self) -> Text:
        return "action_get_balance"

    def run(self, dispatcher: CollectingDispatcher,
        tracker: Tracker,
        domain: Dict[Text, Any]) -> List[Dict[Text, Any]]:

        url = "http://127.0.0.1:8000/api/get-balance"
        resp = requests.get(url).json()

        dispatcher.utter_message(text="Your balance is $"+resp['message']+". Do you wish to add funds?")
        return []
        # return [events.SlotSet("account_type", data["account_type"])]

class CreateInvoice(Action):
    def name(self) -> Text:
        return "action_create_invoice"

    def run(self, dispatcher: CollectingDispatcher,
        tracker: Tracker,
        domain: Dict[Text, Any]) -> List[Dict[Text, Any]]:

        amount = tracker.get_slot('amount')

        if not amount:
            dispatcher.utter_message("How much do you want to add?")
            return []
        resp = requests.get('http://127.0.0.1:8000/api/add-funds/{amount}').json()

        dispatcher.utter_message(text="Ready for payment.")
        return []
        # return [events.SlotSet("account_type", data["account_type"])]

class ActionOrderStatus(Action):
    def name(self) -> Text:
        return "action_order_status"

    def run(self, dispatcher: CollectingDispatcher,
        tracker: Tracker,
        domain: Dict[Text, Any]) -> List[Dict[Text, Any]]:

        # url = "http://google.com"
        dispatcher.utter_message(text="Your order is paid. Expect your order in 2 days time. Your pickup location is Eastgate Mall")
        return []
        # return [events.SlotSet("account_type", data["account_type"])]




# class ActionHelloWorld(Action):

#     def name(self) -> Text:
#         return "action_hello_world"

#     def run(self, dispatcher: CollectingDispatcher,
#             tracker: Tracker,
#             domain: Dict[Text, Any]) -> List[Dict[Text, Any]]:

#         dispatcher.utter_message(text="Hello World!")

#         return []

# class ActionVideo(Action):
#     def name(self) -> Text:
#         return "action_video"

#     def run(self, dispatcher: CollectingDispatcher,
#         tracker: Tracker,
#         domain: Dict[Text, Any]) -> List[Dict[Text, Any]]:

#         video_url="https://youtu.be/OUpL5nxKI4A"
#         dispatcher.utter_message(text="Wait... Playng a video!")
#         webbrowser.open(video_url)
#         return []
