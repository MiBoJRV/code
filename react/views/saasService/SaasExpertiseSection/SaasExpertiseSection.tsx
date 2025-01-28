import React from 'react';
import { SaasExpertiseType } from 'src/types';
import { LogoListItem, SaasExpertiseListItem } from 'src/components';
import { Heading2, PageSection, Text1 } from 'src/ui-kit';

export const SaasExpertiseSection: React.FC<SaasExpertiseType> = ({
  title,
  description,
  features,
  logos,
}): JSX.Element => (
  <PageSection>
    <div className="flex flex-col justify-center mx-auto text-center max-w-full lg:max-w-[1085px]">
      <Heading2>{title}</Heading2>
      <Text1
        fontSize="text-x2-mob"
        className="mt-8 xs:px-4 lg:px-16 sm:w-auto lg:mt-10"
      >
        {description}
      </Text1>
    </div>
    <ul className="relative text-center w-full my-10 gap-5 flex justify-center flex-wrap lg:mb-[54px]">
      {features.map((feature) => (
        <SaasExpertiseListItem key={feature.id} {...feature} />
      ))}
    </ul>
    <ul className="flex justify-center flex-wrap gap-x-7 sm:gap-x-12 gap-y-4 items-center lg:gap-x-[70px]">
      {logos.map((logo) => (
        <LogoListItem key={logo.id} {...logo} />
      ))}
    </ul>
  </PageSection>
);
