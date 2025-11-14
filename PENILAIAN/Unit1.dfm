object Form1: TForm1
  Left = 209
  Top = 153
  Width = 1305
  Height = 821
  Caption = 'Form1'
  Color = clBtnFace
  Font.Charset = DEFAULT_CHARSET
  Font.Color = clWindowText
  Font.Height = -11
  Font.Name = 'MS Sans Serif'
  Font.Style = []
  OldCreateOrder = False
  PixelsPerInch = 96
  TextHeight = 13
  object Label5: TLabel
    Left = 80
    Top = 232
    Width = 78
    Height = 13
    Caption = 'NILAI MURNI'
    Font.Charset = DEFAULT_CHARSET
    Font.Color = clWindowText
    Font.Height = -11
    Font.Name = 'MS Sans Serif'
    Font.Style = [fsBold]
    ParentFont = False
  end
  object Label6: TLabel
    Left = 360
    Top = 224
    Width = 44
    Height = 13
    Caption = 'GRADE'
    Font.Charset = DEFAULT_CHARSET
    Font.Color = clWindowText
    Font.Height = -11
    Font.Name = 'MS Sans Serif'
    Font.Style = [fsBold]
    ParentFont = False
  end
  object Label9: TLabel
    Left = 256
    Top = 416
    Width = 86
    Height = 13
    Caption = 'BIAYA WAKTU'
    Font.Charset = DEFAULT_CHARSET
    Font.Color = clWindowText
    Font.Height = -11
    Font.Name = 'MS Sans Serif'
    Font.Style = [fsBold]
    ParentFont = False
  end
  object GroupBox1: TGroupBox
    Left = 56
    Top = 32
    Width = 561
    Height = 177
    Font.Charset = DEFAULT_CHARSET
    Font.Color = clWindowText
    Font.Height = -11
    Font.Name = 'MS Sans Serif'
    Font.Style = [fsBold]
    ParentFont = False
    TabOrder = 0
    object Label1: TLabel
      Left = 24
      Top = 48
      Width = 77
      Height = 13
      Caption = 'UJIAN TULIS'
    end
    object Label2: TLabel
      Left = 24
      Top = 112
      Width = 90
      Height = 13
      Caption = 'UJIAN PRAKTE'
    end
    object Label3: TLabel
      Left = 320
      Top = 40
      Width = 36
      Height = 13
      Caption = 'X 40%'
    end
    object Label4: TLabel
      Left = 320
      Top = 112
      Width = 36
      Height = 13
      Caption = 'X 60%'
    end
    object Edit1: TEdit
      Left = 136
      Top = 40
      Width = 121
      Height = 21
      TabOrder = 0
      OnChange = Edit1Change
    end
    object Edit2: TEdit
      Left = 136
      Top = 112
      Width = 121
      Height = 21
      TabOrder = 1
      OnChange = Edit2Change
    end
    object Edit3: TEdit
      Left = 408
      Top = 40
      Width = 121
      Height = 21
      TabOrder = 2
    end
    object Edit4: TEdit
      Left = 408
      Top = 112
      Width = 121
      Height = 21
      TabOrder = 3
    end
  end
  object Edit5: TEdit
    Left = 184
    Top = 224
    Width = 121
    Height = 21
    TabOrder = 1
    OnChange = Edit5Change
    OnClick = Edit5Click
  end
  object Edit6: TEdit
    Left = 464
    Top = 224
    Width = 121
    Height = 21
    TabOrder = 2
  end
  object GroupBox2: TGroupBox
    Left = 56
    Top = 264
    Width = 553
    Height = 129
    Caption = 'PILIH JURUSAN'
    Font.Charset = DEFAULT_CHARSET
    Font.Color = clWindowText
    Font.Height = -11
    Font.Name = 'MS Sans Serif'
    Font.Style = [fsBold]
    ParentFont = False
    TabOrder = 3
    object Label7: TLabel
      Left = 176
      Top = 40
      Width = 117
      Height = 13
      Caption = 'BIAYA JURUSAN MI'
    end
    object Label8: TLabel
      Left = 168
      Top = 88
      Width = 119
      Height = 13
      Caption = 'BIAYA JURUSAN TK'
    end
    object CheckBox1: TCheckBox
      Left = 56
      Top = 40
      Width = 97
      Height = 17
      Caption = 'MI'
      TabOrder = 0
      OnClick = CheckBox1Click
    end
    object CheckBox2: TCheckBox
      Left = 56
      Top = 88
      Width = 97
      Height = 17
      Caption = 'TK'
      TabOrder = 1
      OnClick = CheckBox2Click
    end
    object Edit7: TEdit
      Left = 304
      Top = 40
      Width = 121
      Height = 21
      TabOrder = 2
    end
    object Edit8: TEdit
      Left = 304
      Top = 88
      Width = 121
      Height = 21
      TabOrder = 3
    end
  end
  object GroupBox3: TGroupBox
    Left = 56
    Top = 408
    Width = 153
    Height = 121
    Caption = 'PILIHAN KULIAH'
    Font.Charset = DEFAULT_CHARSET
    Font.Color = clWindowText
    Font.Height = -11
    Font.Name = 'MS Sans Serif'
    Font.Style = [fsBold]
    ParentFont = False
    TabOrder = 4
    object RadioButton1: TRadioButton
      Left = 24
      Top = 40
      Width = 113
      Height = 17
      Caption = 'PAGI/SIANG'
      TabOrder = 0
      OnClick = RadioButton1Click
    end
    object RadioButton2: TRadioButton
      Left = 24
      Top = 80
      Width = 113
      Height = 17
      Caption = 'SORE/MALAM'
      TabOrder = 1
      OnClick = RadioButton2Click
    end
  end
  object Edit9: TEdit
    Left = 344
    Top = 416
    Width = 217
    Height = 33
    TabOrder = 5
  end
  object Edit10: TEdit
    Left = 344
    Top = 472
    Width = 217
    Height = 33
    TabOrder = 6
  end
  object Button1: TButton
    Left = 56
    Top = 544
    Width = 153
    Height = 33
    Caption = 'TOTAL BIAYA '
    Font.Charset = DEFAULT_CHARSET
    Font.Color = clWindowText
    Font.Height = -11
    Font.Name = 'MS Sans Serif'
    Font.Style = [fsBold]
    ParentFont = False
    TabOrder = 7
    OnClick = Button1Click
  end
  object Button2: TButton
    Left = 56
    Top = 600
    Width = 257
    Height = 49
    Caption = 'ISI DATA LAGI'
    Font.Charset = DEFAULT_CHARSET
    Font.Color = clWindowText
    Font.Height = -11
    Font.Name = 'MS Sans Serif'
    Font.Style = [fsBold]
    ParentFont = False
    TabOrder = 8
    OnClick = Button2Click
  end
  object Button3: TButton
    Left = 336
    Top = 600
    Width = 241
    Height = 49
    Caption = 'CLOSE'
    Font.Charset = DEFAULT_CHARSET
    Font.Color = clWindowText
    Font.Height = -11
    Font.Name = 'MS Sans Serif'
    Font.Style = [fsBold]
    ParentFont = False
    TabOrder = 9
    OnClick = Button3Click
  end
end
