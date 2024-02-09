This is an updated and safer version of my JS weather app.
Instead of calling the OpenWeather API on the client side (using fetch), this now uses PHP to make the request on the server side and thus avoiding leaking the API key. 
If you are going to use this on a professionnal scale (which is honestly a terrible idea) do make some security improvements to it because, although the api key is hidden behind 
the php wall, I cannot guarantee that it is untouchable. 
