<?php


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
