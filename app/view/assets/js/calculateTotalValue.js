document.addEventListener('DOMContentLoaded', function() {
    let quantityInput   = document.getElementById('quantidade'   );
    let unitPriceInput  = document.getElementById('valorUnitario');
    let totalValueInput = document.getElementById('valorTotal'   );

    quantityInput.addEventListener ('input', updateTotalValue);
    unitPriceInput.addEventListener('input', updateTotalValue);

    function updateTotalValue() {
        var quantity = parseFloat (quantityInput.value);
        var unitPrice = parseFloat(unitPriceInput.value);

        if (isNaN(unitPrice))
        {
            unitPrice = 0;
        }

        var totalValue = quantity * unitPrice;

        if (isNaN(totalValue))
        {
            totalValue = 0; // Set it to 0 if not a valid number
        }

        totalValueInput.value = totalValue.toFixed(2);
    }
});