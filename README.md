# Image Sourcerer Proxy Server
This is a pure php web server that's designed to interface with the [Image Sourcerer](https://github.com/JakeGuy11/image-sourcerer) browser extension. Due to the fact that pure JavaScript cannot use dangerous browser headers (specifically `referer` and `Access-Control-Allow-Origin`), some sites could not be supported in a practical way. This server solves that. It gets the request from Image Sourcerer, makes the unsafe call itself and returns it to the extension.

Since there is no origin checking, this proxy can be used by anyone anywhere. I ask that you don't use it outside of Image Sourcerer, as the service I'm hosting it on (Heroku) has a very limited number of server hours. If you do want to use it for something else, contact me (details below) and we can work something out!

# Donate
As mentioned above, the hosting service I'm using is quite limited in server hours. If you would like higher speeds or the server has run out of monthly server time, please consider donating! You can find more details [here](https://github.com/JakeGuy11/image-sourcerer/blob/main/donate.md) or donate directly [here](https://www.paypal.com/paypalme/JakeGuy11)

# Contact Me
If you have anything to say, or would like to contact me about use outside of Image Sourcerer, please email me at Jake_Guy_11@protonmail.ch or PM me on Discord at JakeGuy11#1541.

