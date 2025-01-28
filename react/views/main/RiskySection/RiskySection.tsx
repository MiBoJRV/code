import React from 'react';
import { BorderedText, Heading2, Heading4, PageSection } from 'src/ui-kit';
import { ArrowDownIcon } from 'src/assets/icons';

export const RiskySection = (): JSX.Element => (
  <PageSection>
    <div className="m-auto text-center relative">
      <div>
        <Heading2 className="text-h2-mob leading-[55px] mb-11 lg:text-h2 lg:mb-16">
          <span className="block lg:py-2.5">Building software is</span>
          <BorderedText title="complicated" />
          <BorderedText title="costly" />
          <span className="mx-2.5">and</span>
          <BorderedText title="risky" />
        </Heading2>
        <Heading4
          fontSize="text-x2"
          fontSizeLg="lg:text-h4"
          className="mb-10 lg:font-medium lg:mb-[70px]"
          title="But it doesn't have to be that way."
        />
        <div className="flex justify-center">
          <ArrowDownIcon />
        </div>
      </div>
    </div>
  </PageSection>
);
