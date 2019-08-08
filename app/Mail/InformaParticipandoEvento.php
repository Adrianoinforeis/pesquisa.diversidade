<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Eventos;  //usando o model eventos

class InformaParticipandoEvento extends Mailable
{
    use Queueable, SerializesModels;
    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Eventos $data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->from('eventos@ceert.org.br', 'Programa Eventos') //Quem vai receber o e-mail.
                    ->subject('Inscrição realizada com sucesso!') //Assunto do e-mail (Caso não seja especificado por default pega o nome da própria classe).
                   // ->attach() //Para enviar anexos por e-mail.
                   ->with([
                    'data' => $this->data,
                    ])
                    ->view('emails.participando-evento-programa'); //A view blade com o layout e conteúdo do e-mail.
    }
}
