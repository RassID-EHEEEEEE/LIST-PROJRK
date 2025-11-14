object Form1: TForm1
  Left = 1497
  Top = 195
  Width = 409
  Height = 360
  Caption = 'Form1'
  Color = clBtnFace
  Font.Charset = DEFAULT_CHARSET
  Font.Color = clWindowText
  Font.Height = -11
  Font.Name = 'MS Sans Serif'
  Font.Style = []
  OldCreateOrder = False
  OnCreate = FormCreate
  PixelsPerInch = 96
  TextHeight = 13
  object ProgressBar1: TProgressBar
    Left = 56
    Top = 64
    Width = 273
    Height = 49
    TabOrder = 0
  end
  object Button1: TButton
    Left = 256
    Top = 176
    Width = 75
    Height = 25
    Caption = 'OPEN MP3'
    TabOrder = 1
    OnClick = Button1Click
  end
  object MediaPlayer1: TMediaPlayer
    Left = 64
    Top = 136
    Width = 253
    Height = 30
    TabOrder = 2
    OnClick = MediaPlayer1Click
  end
  object XPManifest1: TXPManifest
    Left = 72
    Top = 192
  end
  object OpenDialog1: TOpenDialog
    Left = 184
    Top = 184
  end
  object Timer1: TTimer
    OnTimer = Timer1Timer
    Left = 112
    Top = 184
  end
end
