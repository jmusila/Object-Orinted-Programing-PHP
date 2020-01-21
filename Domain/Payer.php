<? php 

namespace Bookstore\Domain;

interface Payer {
    public function pay(float $amont);
    public function isExtentOfTaxes()
}