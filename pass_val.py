from flask import Flask,request, jsonify, render_template
import sys
app = Flask(__name__)

@app.route('/')
def hello_world():
   return "Hello World"

@app.route('/pass_val',methods=['POST'])
def pass_val():
    name=request.form['value']
    print('name',name)
if __name__ == "__main__":
    app.run(debug = True)
