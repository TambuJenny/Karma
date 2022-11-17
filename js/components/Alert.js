export function AlertError(informacao) {
  return `<div class="alert alert-danger d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
  <div>
   `+informacao+`
  </div>
</div>`;
}

export function AlertSucces(informacao) {
  return (
    `<div class="alert alert-success d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
  <div>
    ` +
    informacao +
    `
  </div>
</div>`
  );
}
