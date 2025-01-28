import React from 'react';
import { Heading5, Link, Text4 } from 'src/ui-kit';

export const CompanyName: React.FC = (): JSX.Element => (
  <div>
    <Heading5
      fontSize="text-h5"
      fontSizeLg="lg:text-h5"
      className="font-semibold !leading-6"
      title="Wetelo"
    />
    <Heading5
      fontSize="text-base"
      fontSizeLg="lg:text-base"
      className="font-semibold"
      title="Product development company"
    />
    <Text4
      className="mt-5 lg:mt-3.5"
      title="We build solutions that incorporate the latest technology, fulfilling our clients' needs and expectations."
    />
    <Link
      className="mt-3.5 mb-12 text-link-box leading-6"
      title="Hire us"
      href="#"
    />
  </div>
);
