// White Coloring the 'En fournissant vos informations de carte bancaire, vous autorisez WooCommerce Payments à débiter votre carte pour les paiements futurs conformément à ses conditions.'
// text in the stripe iframe checkout
document.addEventListener('wcpay_elements_appearance', function (event) {
  const appearance = event.detail && event.detail.appearance;

  if (!appearance) {
    return;
  }

  appearance.rules = appearance.rules || {};
  appearance.rules['.TermsText'] = {
    ...(appearance.rules['.TermsText'] || {}),
    color: 'red',
  };

  // event.detail.appearance.rules['.TermsText'] = {
  //     color: '#ffffff'
  // };
});
