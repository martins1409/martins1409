#Deforma simples podemos dizer que a recurcividade ocorre
#quando a funão é execultada de forma repetitiva dentro da propria fução
#até alcançar o caso base quando é finalizada
i = int(input("Digite o Numero :"))

def fatorial(n):

    #caso base: O fatorial de 0 é 1

    if n == 0:
        return 1
    
    #O fatorial de um numero n é: n * fatorial(n - 1)

    return n * fatorial(n - 1)

print(fatorial(i))
