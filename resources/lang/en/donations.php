<?php

return [
    'paypal' => [
        'title' => 'Pay with PayPal',
        'disabled' => 'This method is currently disabled.',
        'empty' => 'Currently are none price packages added, please contact the support.',
        'pay-text' => 'Pay :price :currency for :amount :silk_name',
        'submit' => 'Buy now!',

        'pending' => 'You have pending payments!',
    ],
    'notification' => [
        'buy' => [
            'success-title' => 'Done',
            'success-message' => 'Your donation has been processed successfully, thanks!',
            'success-help' => 'You have just been credited :amount ' . config('siteSettings.sro_silk_name', 'Silk') . ' to your account. Have fun with it!',
            'success-back' => 'Go back to your Dashboard',
            'invoice-closed-title' => 'Processed',
            'invoice-closed-message' => 'This donation was already processed, thanks!',
            'invoice-help' => 'It seems that Paypal needs a little bit longer to send the answer to us, please wait a little bit, the transaction is being done right now.',
            'invoice-ahref' => 'Go back',
            'error-title' => 'Ups!',
            'error' => 'Something went wrong, please try it again or write a ticket.',
            'error-helper' => 'You can try it again, we are logging each step you are doing.',
            'error-ahref' => 'Go back',

            'notification' => 'Successfully bought :amount ' . config('siteSettings.sro_silk_name', 'Silk'),
        ]
    ],
];
