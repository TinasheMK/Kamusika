# This files contains your custom actions which can be used to run
# custom Python code.

# See this guide on how to implement these action:
# https://rasa.com/docs/rasa/custom-actions


# This is a simple example for a custom action which utters "Hello World!"

import keyword
from typing import Any, Text, Dict, List
from urllib import request

from rasa_sdk import Action, Tracker, events, FormValidationAction 
from rasa_sdk.executor import CollectingDispatcher
import webbrowser
from rasa_sdk.types import DomainDict

apiUrl = "localhost:4000"


class CreateInvoice(Action):
    def name(self) -> Text:
        return "validate_add_funds_form"

    def validate_amount(
        self,
        slot_value: Any,
        dispatcher: CollectingDispatcher,
        tracker: Tracker,
        domain: DomainDict,
    ) -> Dict[Text, Any]:
        """Validate `amount` value."""

        if slot_value < "10":
            dispatcher.utter_message(text=f"Minimum deposit is $10")
            return {"amount": None}
        dispatcher.utter_message(text=f"OK! You want to add ${slot_value} to your account")
        return {"amount": slot_value}


class ActionGetBalance(Action):
    def name(self) -> Text:
        return "action_get_balance"

    def run(self, dispatcher: CollectingDispatcher,
        tracker: Tracker,
        domain: Dict[Text, Any]) -> List[Dict[Text, Any]]:

        # url = "http://google.com"
        dispatcher.utter_message(text="Your balance is meep dollar???. Do you wish to add funds?")
        return []
        # return [events.SlotSet("account_type", data["account_type"])]



class ActionHelloWorld(Action):

    def name(self) -> Text:
        return "action_hello_world"

    def run(self, dispatcher: CollectingDispatcher,
            tracker: Tracker,
            domain: Dict[Text, Any]) -> List[Dict[Text, Any]]:

        dispatcher.utter_message(text="Hello World!")

        return []

class ActionVideo(Action):
    def name(self) -> Text:
        return "action_video"

    def run(self, dispatcher: CollectingDispatcher,
        tracker: Tracker,
        domain: Dict[Text, Any]) -> List[Dict[Text, Any]]:

        video_url="https://youtu.be/OUpL5nxKI4A"
        dispatcher.utter_message(text="Wait... Playng a video!")
        webbrowser.open(video_url)
        return []
