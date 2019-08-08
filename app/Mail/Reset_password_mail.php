<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\User;

class Reset_password_mail extends Mailable
{
    use Queueable, SerializesModels;
    public $dados;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $data)
    {
       $this->dados = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('contato@ceert.org.br', 'Programa Itaú Social') //Quem vai receber o e-mail.
                    ->subject('Esqueceu a senha') //Assunto do e-mail (Caso não seja especificado por default pega o nome da própria classe).
                   // ->attach() //Para enviar anexos por e-mail.
                   ->with([
                    'dados' => $this->dados,
                    ])
                    ->view('emails.reset_password_view'); //A view blade com o layout e conteúdo do e-mail.
    }
}
