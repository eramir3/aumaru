// DELETE
document.addEventListener('wcpay_elements_appearance', function (event) {
  const appearance = event.detail && event.detail.appearance;

  if (!appearance) {
    return;
  }

  appearance.rules = appearance.rules || {};
  appearance.rules['.TermsText'] = {
    ...(appearance.rules['.TermsText'] || {}),
    color: '#ffffff',
  };
});
