#Implementação da sequencia de Fibonacci

#Algoritimo Fn = Fn - 1 + Fn - 2

i = int(input("Digite o numero : "))
def fib(n):

    #caso base, finaliza a função
    if n <= 1:
        return n

    #Calculo do n-ésimo termo
    else:
        return fib(n - 1) + fib(n - 2)

print(fib(i))