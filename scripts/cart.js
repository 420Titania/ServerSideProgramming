$(document).ready(function() {
    let cart = {};

    function updateCartTable() {
        let $cartTableBody = $('#cart-table tbody');
        $cartTableBody.empty();
        let total = 0;

        for (let item in cart) {
            let itemTotal = cart[item].price * cart[item].quantity;
            total += itemTotal;
            $cartTableBody.append(
                `<tr>
                    <td>${item}</td>
                    <td>Rp. ${cart[item].price}</td>
                    <td>${cart[item].quantity}</td>
                </tr>`
            );
        }

        $cartTableBody.append(
            `<tr>
                <td colspan="2"><strong>Total</strong></td>
                <td><strong>Rp. ${total}</strong></td>
            </tr>`
        );
    }

    $('.plus-btn').click(function() {
        let itemName = $(this).data('name');
        let itemPrice = parseFloat($(this).data('price'));

        if (cart[itemName]) {
            cart[itemName].quantity += 1;
        } else {
            cart[itemName] = {
                price: itemPrice,
                quantity: 1
            };
        }

        updateCartTable();
    });

    $('.minus-btn').click(function() {
        let itemName = $(this).data('name');

        if (cart[itemName]) {
            cart[itemName].quantity -= 1;

            if (cart[itemName].quantity <= 0) {
                delete cart[itemName];
            }

            updateCartTable();
        }
    });

    $('#order-button').click(function() {
        let total = 0;
        for (let item in cart) {
            total += cart[item].price * cart[item].quantity;
        }

        let phoneNumber = $('#phone-number').val();

        $.ajax({
            url: 'scripts/submit.php',
            type: 'POST',
            data: {
                total: total,
                phone: phoneNumber
            },
            success: function(response) {
                alert('Order placed successfully!');
                cart = {};
                updateCartTable();
                $('#phone-number').val('');
            },
            error: function() {
                alert('Failed to place order.');
            }
        });
    });
});
