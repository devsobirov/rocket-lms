<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use function Matrix\trace;

class SendVerificationEmailCode extends Notification implements ShouldQueue
{
    use Queueable;
    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $generalSettings = getGeneralSettings();
        $siteName = !empty($generalSettings['site_name']) ? $generalSettings['site_name'] : '';
        $subject = trans('auth.email_confirmation');

        $confirm = [
            'title' => $subject . ' ' . trans('auth.in') . ' ' . $siteName,
            'message' => trans('auth.email_confirmation_template_body', ['email' => $notifiable->email, 'site' => $siteName]),
            'code' => $notifiable->code
        ];

        return (new MailMessage)
            ->subject($subject)
            ->from(!empty($generalSettings['site_email']) ? $generalSettings['site_email'] : env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'))
            ->view('web.default.emails.confirmCode', [
                'confirm' => $confirm,
                'generalSettings' => $generalSettings
            ]);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
