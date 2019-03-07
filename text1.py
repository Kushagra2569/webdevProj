#!/usr/bin/python
 
print('Content-Type: text/html\n\n')

from flask import Flask,request, redirect
app = Flask(__name__)
@app.route('/signup', methods = ['POST'])
def signup():
    email = request.form['email']
    print("The email address is '" + email + "'")
    return redirect('/')

if __name__ == "__main__":
    app.run()

