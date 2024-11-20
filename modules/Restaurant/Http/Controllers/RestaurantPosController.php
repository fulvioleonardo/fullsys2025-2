<?php

namespace Modules\Restaurant\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class RestaurantPosController extends Controller
{
    public function index()
    {
        // Return the view for the POS interface
        return view('restaurant::pos.index');
    }

    public function checkout(Request $request)

        // Validate inventory for each item in the request
        $items = $request->get('items'); // Assumes 'items' is an array of items being purchased
        $errors = [];

        foreach ($items as $item) {
            $product = \App\Models\Tenant\Item::find($item['id']);

            if (!$product) {
                $errors[] = "Product with ID {$item['id']} does not exist.";
                continue;
            }

            if ($product->stock < $item['quantity']) {
                $errors[] = "The product '{$product->name}' cannot be sold. Stock available: {$product->stock}, requested: {$item['quantity']}.";
            }
        }

        if (!empty($errors)) {
            return response()->json([
                'success' => false,
                'errors' => $errors,
            ], 400);
        }

    {
        // Handle the checkout logic, e.g., creating an invoice
        return response()->json(['success' => true]);
    }


    public function searchBarcode(Request $request)
    {
        $barcode = $request->get('barcode');
        
        // Validar que el código de barras sea enviado
        if (!$barcode) {
            return response()->json(['error' => 'Barcode is required'], 400);
        }

        // Buscar el producto basado en el código de barras y el tenant actual
        $product = \App\Models\Tenant\Item::where('barcode', $barcode)->first();

        if (!$product) {
            return response()->json(['error' => 'Product not found'], 404);
        }

        return response()->json(['product' => $product], 200);
    }



    public function sendInvoiceViaWhatsApp(Request $request)
    {
        $invoiceId = $request->get('invoice_id');
        $phone = $request->get('phone');

        if (!$invoiceId || !$phone) {
            return response()->json(['error' => 'Invoice ID and phone number are required'], 400);
        }

        // Simulated invoice retrieval and WhatsApp message sending
        $invoice = \App\Models\Tenant\Invoice::find($invoiceId);

        if (!$invoice) {
            return response()->json(['error' => 'Invoice not found'], 404);
        }

        // Simulate WhatsApp API call (replace this with actual API call)
        $message = "Your invoice ({$invoice->id}) for {$invoice->total} has been sent!";
        // Here, you would use an API like Twilio's WhatsApp API to send the actual message.

        return response()->json([
            'success' => true,
            'message' => $message,
            'phone' => $phone,
        ]);
    }

}