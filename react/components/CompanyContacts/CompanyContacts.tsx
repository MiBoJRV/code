import React from 'react';

export const CompanyContacts: React.FC = (): JSX.Element => (
  <address className="not-italic">
    <div className="text-x4 leading-[21px] text-grey mt-2.5 lg:text-link-box-mob lg:leading-[21px]">
      <p>364 E Main Street, Suite 1008,</p>
      <p> Middletown, DE 19709</p>
      <a className="block w-fit hover:text-blue-light" href="tel:+1258695485">
        +1258695485
      </a>
      <a
        className="block w-fit hover:text-blue-light"
        href="mailto: i@wetelo.com"
      >
        i@wetelo.com
      </a>
    </div>
  </address>
);
