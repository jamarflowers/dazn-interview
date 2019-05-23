variable = 89
variableTwo = 0

while variable > variableTwo:
    variableTwo = variableTwo + 1
    print variableTwo 
    
    if(variableTwo % 3 == 0):
        print("FIZZ")
    elif(variableTwo % 5 == 0):
        print("BUZZ")
    if variable % 3 == 0 or variableTwo % 5 == 0:
        print("FIZZBUZZ")