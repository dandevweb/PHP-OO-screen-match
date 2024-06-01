<?php

/*
Praticar é muito importante! Por isso, preparamos uma lista de exercícios para você exercitar o conteúdo abordado nesta aula.

1) Crie uma enum em PHP com tipos de contas bancárias e implemente um método informando se a conta possui taxas. Contas correntes e de investimento possuem taxas, enquanto contas poupança e universitárias não;

2) Crie uma classe que represente uma conta com as propriedades saldo, nome do titular e tipo. Use os tipos e formas de acesso adequadas.

Você pode clicar no botão Opinião do instrutor para conferir as respostas.
*/

enum AccountType
{
    case Corrente;
    case Poupanca;
    case Investimento;
    case Universitaria;

    public function temTaxa(): bool
    {
        return match ($this) {
            self::Corrente, self::Investimento => true,
            default => false,
        };
    }
}


class BankAccount
{
    public function __construct(
        public readonly string $nome,
        public AccountType $tipo,
        private float $balance = 0
    ){}

}

$account = new BankAccount(
    "Danilo Augusto",
    AccountType::Poupanca
);

var_dump($account->tipo->temTaxa());
