import React from 'react';
import cn from 'classnames';
import { Heading5 } from 'src/ui-kit';
import {
  CompanyContacts,
  CompanyName,
  PrivacyPolicy,
  Socials,
} from 'src/components';

type AboutCompanyProps = {
  className?: string;
};
export const AboutCompany: React.FC<AboutCompanyProps> = ({
  className,
}): JSX.Element => (
  <div className={cn(``, className)}>
    <CompanyName />
    <div className="flex justify-start gap-5 lg:block">
      <div className="w-1/2 lg:w-full">
        <Heading5 fontSize="text-x1" className="font-bold" title="Delaware" />
        <CompanyContacts />
      </div>
      <div className="w-1/2 lg:w-full">
        <Socials />
        <PrivacyPolicy />
      </div>
    </div>
  </div>
);
