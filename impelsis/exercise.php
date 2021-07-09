Question 1: 

Create a company JSON with different key values.

Given below are the steps you will need to follow:

#1) Open a notepad or any text editor.

#2) Create a company JSON with different key-value pairs.

#3) Add data for at least two companies.

#4) Include an array field in the JSON.

#5) Use a nested JSON.

#6) Now navigate JSON Validator.

#7) Paste your JSON structure inside the text area and click on validate to validate your JSON.

Answer:

[
{
	"Name" : "Zafar Hussain",
	"Post" : "Developer",
	"Language Expertise" : [ "PHP", "Jaascript", "C", "C++"],
	"Salary" : "18000",
	"Colleagues" :
		[ { "Name" : "Ashwin", "Post" : "Developer"}, { "Name" : "Muriel", "Post" : "Developer"}, { "Name" : "Sameeha", "Post" : "Developer"} ],
	"Car" : {
		"Name" : "Ambassidor",
		"Description" : "The Best car"
	}
},
{
	"Name" : "Ashwin",
	"Post" : "Developer",
	"Language Expertise" : [ "PHP", "Jaascript", "C", "C++", "Python"],
	"Salary" : "18000",
	"Colleagues" :
		[ { "Name" : "Zafar", "Post" : "Developer"}, { "Name" : "Muriel", "Post" : "Developer"}, { "Name" : "Sameeha", "Post" : "Developer"} ],
	"Car" : {
		"Name" : "Ferrari",
		"Description" : "Favorite car"
	}
},
{
	"Name" : "Muriel",
	"Post" : "Developer",
	"Language Expertise" : [ "PHP", "Jaascript", "C", "C++", ".Net"],
	"Salary" : "18000",
	"Colleagues" :
		[ { "Name" : "Zafar", "Post" : "Developer"}, { "Name" : "Thashina", "Post" : "Developer"}, { "Name" : "Sameeha", "Post" : "Developer"} ],
	"Car" : {
		"Name" : "BMW",
		"Description" : "Awesome car"
	}
}
]
