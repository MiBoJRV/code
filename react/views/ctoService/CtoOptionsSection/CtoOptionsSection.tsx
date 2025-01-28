import React from 'react';
import { CtoOptionType } from 'src/types';
import { CtoOptionListItem } from 'src/components';
import { CtoOptionBox, Heading2, PageSection } from 'src/ui-kit';

export const CtoOptionsSection: React.FC<CtoOptionType> = ({
  title,
  options,
}): JSX.Element => (
  <PageSection>
    <Heading2 className="flex flex-wrap items-center justify-center text-center">
      {title}
    </Heading2>
    <ol className="overflow-hidden grid grid-cols-1 gap-x-5 gap-y-0 mx-auto mt-[60px] lg:grid-cols-2-1 ">
      {options.map((option) => (
        <CtoOptionBox key={option.id} className="mb-14 xs:-mb-8 lg:-mb-[70px]">
          <CtoOptionListItem {...option} />
        </CtoOptionBox>
      ))}
    </ol>
  </PageSection>
);
