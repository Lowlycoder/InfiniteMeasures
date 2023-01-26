<?php

namespace app\service;

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

// cannot autoload PHPMailer with custom autoloader
require_once __DIR__.'/../../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require_once __DIR__.'/../../vendor/phpmailer/phpmailer/src/Exception.php';
require_once __DIR__.'/../../vendor/phpmailer/phpmailer/src/SMTP.php';

class Mailer
{
    private const TEMPLATE_PATH = __DIR__.'/../views/email/';
    private PHPMailer $mailer;

    /**
     * @throws Exception
     */
    public function __construct()
    {
        $this->mailer = new PHPMailer();
        $this->mailer->isSMTP();
        $this->mailer->SMTPAuth = true;
        $this->mailer->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $this->mailer->SMTPDebug = SMTP::DEBUG_OFF;

        $this->mailer->Host = getenv('MAILER_HOST');
        $this->mailer->Username = getenv('MAILER_USERNAME');
        $this->mailer->Password = getenv('MAILER_PASSWORD');
        $this->mailer->Port = getenv('MAILER_PORT') ?: 587;

        $this->mailer->CharSet = 'utf-8';
        $this->mailer->Encoding = 'base64';

        $this->mailer->setFrom(getenv('MAILER_USERNAME'), 'ColibrIT');
        $this->mailer->isHTML(true);
    }

    /**
     * @param string $recipient The email address to send to
     *
     * @return $this
     *
     * @throws Exception
     */
    public function to(string $recipient): self
    {
        $this->mailer->addAddress($recipient);

        return $this;
    }

    /**
     * @throws Exception
     */
    public function toAdmin(): self
    {
        $this->mailer->addAddress(getenv('MAILER_USERNAME'), 'ColibrIT');

        return $this;
    }

    /**
     * @throws Exception
     */
    public function replyTo(string $email, string $name = ''): self
    {
        $this->mailer->addReplyTo($email, $name);

        return $this;
    }

    /**
     * @param string $author The email address that send the email
     * @param string $name   Author's name
     *
     * @throws Exception
     */
    public function from(string $author, string $name = ''): self
    {
        $this->mailer->setFrom($author, $name);

        return $this;
    }

    /**
     * @param string $subject The mail's subject
     */
    public function subject(string $subject): self
    {
        $this->mailer->Subject = $subject;

        return $this;
    }

    /**
     * @throws Exception
     */
    public function body(string $layout, array $params = []): self
    {
        if (!file_exists(__DIR__."/../views/email/$layout.php")) {
            throw new Exception('File not be found at: '.__DIR__.'/../views/email/');
        }
        ob_start();
        extract($params);

        include __DIR__."/../views/email/$layout.php";

        $this->mailer->Body = ob_get_contents();
        ob_end_clean();

        return $this;
    }

    /**
     * @throws Exception
     */
    public function send(): void
    {
        if (!$this->mailer->send()) {
            throw new Exception($this->mailer->ErrorInfo);
        }
    }

    public function escapeHtml(&$string): string|null
    {
        return isset($string) ? htmlspecialchars($string, ENT_QUOTES) : null;
    }
}
