unit Unit1;

interface

uses
  Windows, Messages, SysUtils, Variants, Classes, Graphics, Controls, Forms,
  Dialogs, StdCtrls, ExtCtrls, MPlayer, XPMan, ComCtrls;

type
  TForm1 = class(TForm)
    ProgressBar1: TProgressBar;
    XPManifest1: TXPManifest;
    OpenDialog1: TOpenDialog;
    Timer1: TTimer;
    Button1: TButton;
    MediaPlayer1: TMediaPlayer;
    procedure FormCreate(Sender: TObject);
    procedure MediaPlayer1Click(Sender: TObject; Button: TMPBtnType;
      var DoDefault: Boolean);
    procedure Timer1Timer(Sender: TObject);
    procedure Button1Click(Sender: TObject);
   
  private
    { Private declarations }
  public
    { Public declarations }
  end;

var
  Form1: TForm1;
  MP3Path: string;
  paused: Boolean;

implementation

{$R *.dfm}

procedure TForm1.FormCreate(Sender: TObject);
begin
paused:= false;
Mediaplayer1.Enabled:=false;
Height :=200;
Width:=440;
Top:=(screen.Height-form1.Height) div 2;
left :=(screen.Width-form1.Width)div 2;

end;

procedure TForm1.MediaPlayer1Click(Sender: TObject; Button: TMPBtnType;
  var DoDefault: Boolean);
begin

if Button = btstop then
begin
Mediaplayer1.Position:=0;
progressbar1.position:=0;
end
else if Button = btstep then
begin
if ((Mediaplayer1.Position+5000)<-Mediaplayer1.Length) then
Mediaplayer1.Position:=Mediaplayer1.position+5000
else
begin
Mediaplayer1.Position:=0;
progressbar1.Position:=0;
end;
Mediaplayer1.Play;end
else if Button = btBack then
begin
if ((Mediaplayer1.Position-5000)>0) then
Mediaplayer1.Position:=MediaPlayer1.Position-5000
else
Mediaplayer1.Position:=0;
MediaPlayer1.Play;
end;

end;

procedure TForm1.Timer1Timer(Sender: TObject);
begin
 if MediaPlayer1.Enabled then
begin
progressBar1.Position:=MediaPlayer1.Position;
if ProgressBar1.Position=MediaPlayer1.Length then
begin
Mediaplayer1.stop;
progressBar1.position:=0;
Mediaplayer1.Close;
Mediaplayer1.Enabled:=true;
MediaPlayer1.fileName:=Mp3Path;
Mediaplayer1.open;
Mediaplayer1.Position:=0;
ProgressBar1.Max:=MediaPlayer1.Length;
ProgressBar1.Min:=0;

end;

end;
end;

procedure TForm1.Button1Click(Sender: TObject);
begin
if OpenDialog1.execute then
begin
Mp3path:=OpenDialog1.FileName;
with Mediaplayer1 do
begin
Enabled:=true;
Filename:=Mp3Path;
open;
Position:=0;
Play;
end;
ProgressBar1.Max:=MediaPlayer1.Length;
ProgressBar1.Min:=0;
end;
end;


end.




