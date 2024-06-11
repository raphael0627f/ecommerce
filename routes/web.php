<?php

use App\Livewire\Auth\ForgotPasswordPage;
use App\Livewire\Auth\LoginPage;
use App\Livewire\Auth\RegisterPage;
use App\Livewire\Auth\ResetPasswordPage;
use App\Livewire\CancelPage;
use App\Livewire\CarrinhoPage;
use App\Livewire\CategoriasPage;
use App\Livewire\CheckoutPage;
use App\Livewire\DetalhesMeuPedidoPage;
use App\Livewire\DetalhesProdutoPage;
use App\Livewire\HomePage;
use App\Livewire\MeuPedidoPage;
use App\Livewire\ProdutosPage;
use App\Livewire\SuccessPage;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class);

Route::get('/categorias', CategoriasPage::class);
Route::get('/produtos', ProdutosPage::class)->name('produtos');
Route::get('/produtos/{rotulo}', DetalhesProdutoPage::class);
Route::get('/carrinho', CarrinhoPage::class);



Route::middleware('guest')->group(function () {
    Route::get('/login', LoginPage::class)->name('login');
    Route::get('/register', RegisterPage::class);
    Route::get('/forgot', ForgotPasswordPage::class)->name('password.request');
    Route::get('/reset/{token}', ResetPasswordPage::class)->name('password.reset');
});

Route::middleware('auth')->group(function () {
    Route::get('/logout', function () {
        auth()->logout();
        return redirect('/');
    });
    Route::get('/checkout', CheckoutPage::class);
    Route::get('/meus-pedidos', MeuPedidoPage::class)->name('meus-pedidos');
    Route::get('/meus-pedidos/{pedido_id}', DetalhesMeuPedidoPage::class)->name('meus-pedidos.show');
    Route::get('/success', SuccessPage::class)->name('success');
    Route::get('/cancel', CancelPage::class)->name('cancel');
});

