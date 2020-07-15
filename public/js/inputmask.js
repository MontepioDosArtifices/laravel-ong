$('[type=cpf]').inputmask('999.999.999-99', {placeholder: 'x'})
$('[type=phone]').inputmask('(99) 9 9999-9999', {placeholder: 'x'})
$('[type=card_number]').inputmask('9999 9999 9999 9999', {placeholder: 'x'})
$('[type=card_cvv]').inputmask('999', {placeholder: '*'})
$('[type=card_date]').inputmask('99/99', {placeholder: 'x'})
$('[type=money]').inputmask('(99){+|1},00', {
  numericInput: true,
  placeholder: '0',
})
