import React from 'react';
import { Heading5 } from 'src/ui-kit';

export const PrivacyPolicy: React.FC = (): JSX.Element => (
  <div className="flex gap-9 mt-[34px] lg:mt-10">
    <a href="#">
      <Heading5
        fontSize="text-h5-mob"
        fontSizeLg="lg:text-h5-mob"
        className="font-semibold !leading-6 hover:text-blue-light"
        title="Terms"
      />
    </a>
    <a href="#">
      <Heading5
        fontSize="text-h5-mob"
        fontSizeLg="lg:text-h5-mob"
        className="font-semibold !leading-6 hover:text-blue-light"
        title="Privacy"
      />
    </a>
  </div>
);
